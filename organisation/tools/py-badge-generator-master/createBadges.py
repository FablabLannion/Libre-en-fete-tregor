#!/usr/bin/env python3
# -*- coding: utf8 -*-
#
# Adaptations done for Libre en Fête en Trégor 2016
# freely inspired by py-badge-generator-master
# @colvert
# 
# Impression avec gThumbs en format paysage 3x3
# 
# This software is licensed under the MIT License
#
# The MIT License
# 
# Copyright (c) 2007 Siddharta Govindaraj. All rights reserved.
# 
# Permission is hereby granted, free of charge, to any person obtaining a copy
# of this software and associated documentation files (the "Software"), to deal
# in the Software without restriction, including without limitation the rights
# to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
# copies of the Software, and to permit persons to whom the Software is
# furnished to do so, subject to the following conditions:
# 
# The above copyright notice and this permission notice shall be included in
# all copies or substantial portions of the Software.
# 
# THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
# IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
# FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
# AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
# LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
# OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
# THE SOFTWARE.
# 

import os,sys,re
import inspect
from colors import *
from subprocess import call

try:
    from PIL import Image
    from PIL import ImageDraw
    from PIL import ImageFont
except:
    try:
        import Image
        import ImageDraw
        import ImageFont
    except:
        print("Install PIL or Pillow please")

	
class BadgeImage(object):
    def __init__(self, filename):
        self.debug = False
        self.img = Image.open(filename)
        self.draw = ImageDraw.Draw(self.img)
        self.width = int(self.img.size[0]*0.9)
        self.ttfFontDir = "fonts"
        self.ttfFont = os.path.join(self.ttfFontDir, "Trebucbd.ttf")
        self.association = ""
        self.role = ""
        self.colorSeperator = "#" + triplet(BLACK)
        self.textColorCompany = "#" + "0099ff"
        self.textColorPerson = "#2b2f61"
        self.textColorAssociation = "#FFFFFF"
        self.textColorColor = "#" + triplet(BLACK)

    def reColor(self,color, srcFile, dstFile):
        call(["/usr/local/bin/convert", "images/badgeTemplate_bw.png", "+level-colors", color + ",white", srcFile, "-compose", "over", "-composite", dstFile])

    def drawAlignedText(self, pos, text, font_color, xtransform, ytransform):
        (font, color) = font_color
        width,height = font.getsize(text)
        xpos = xtransform(pos[0], width)
        ypos = ytransform(pos[1], height)
        if inspect.stack()[1][3] and self.debug == "drawRightAlignedText":
            print(xpos,ypos)
        self.draw.text((xpos, ypos), text, fill=color, font=font)

    def drawCenteredText(self, pos, text, font):
        self.drawAlignedText(pos, unicode(text,'UTF-8'), font, lambda x,w:x-w/2, lambda y,h:y-h/2)
        
    def drawLeftAlignedText(self, pos, text, font):
        self.drawAlignedText(pos, text, font, lambda x,w:x, lambda y,h:y-h)

    def drawRightAlignedText(self, pos, text, font):
        self.drawAlignedText(pos, text, font, lambda x,w:w+x, lambda y,h:y-h)

    def getFitSize(self, startsize, text):
        size = startsize
        font = ImageFont.truetype(self.ttfFont, int(size*300/72))
        textwidth, textheight = font.getsize(text)
        while textwidth > self.width:
            size -= 1
            font = ImageFont.truetype(self.ttfFont, int(size*300/72))
            textwidth, textheight = font.getsize(text)
        return size

    # Ecriture de l'association
    def drawAssociation(self, name):
        linepos = (self.img.size[0]/2, self.img.size[1]/9)
        line1pos = (self.img.size[0]/2, 300)
        line2pos = (self.img.size[0]/2, int(self.img.size[1]/1.7))
        # regression linéaire à 2 balles donne un truc du genre delta = -5/9x + 40/3
        delta = int((-5/9)*len(name)+40/3)
        sizeCharAsso = 25 + delta
        if sizeCharAsso > 30:
			sizeCharAsso = 30
						
        size = self.getFitSize(sizeCharAsso, name)
        if name.find(" ") >= 0:
            firstname, rest = name.split(" ", 1)
        else:
            firstname, rest = (name, "")
        if size < sizeCharAsso and rest != "":
            personFont = ImageFont.truetype(self.ttfFont, int(self.getFitSize(sizeCharAsso, firstname)*300/72))
            self.drawCenteredText(line1pos, firstname, (personFont, self.textColorPerson))
            personFont = ImageFont.truetype(self.ttfFont, int(self.getFitSize(sizeCharAsso, rest)*300/72))
            self.drawCenteredText(line2pos, rest, (personFont, self.textColorAssociation))
        else:
            personFont = ImageFont.truetype(self.ttfFont, int(self.getFitSize(sizeCharAsso, name)*300/72))
            self.drawCenteredText(linepos, name, (personFont, self.textColorAssociation))

    # Ecriture du nom de la personne
    def drawName(self, name):
        linepos = (self.img.size[0]/2, self.img.size[1]/1.5)
        line1pos = (self.img.size[0]/2, 300)
        line2pos = (self.img.size[0]/2, int(self.img.size[1]/1.7))

        if len(name) > 10 :
			sizeCharName = 36
        elif len(name) > 8 :
			sizeCharName = 40
        elif len(name) > 5:
			sizeCharName = 42
        else:
			sizeCharName = 45

        size = self.getFitSize(sizeCharName, name)
        if name.find(" ") >= 0:
            firstname, rest = name.split(" ", 1)
        else:
            firstname, rest = (name, "")
        if size < sizeCharName and rest != "":
            personFont = ImageFont.truetype(self.ttfFont, int(self.getFitSize(sizeCharName, firstname)*300/72))
            self.drawCenteredText(line1pos, firstname, (personFont, self.textColorPerson))
            personFont = ImageFont.truetype(self.ttfFont, int(self.getFitSize(sizeCharName, rest)*300/72))
            self.drawCenteredText(line2pos, rest, (personFont, self.textColorPerson))
        else:
            personFont = ImageFont.truetype(self.ttfFont, int(self.getFitSize(sizeCharName, name)*300/72))
            self.drawCenteredText(linepos, name, (personFont, self.textColorPerson))

    def drawColor(self, color):
        pos = (self.img.size[0]/2, 700)
        font = ImageFont.truetype(self.ttfFont, int(self.getFitSize(26, name)*300/72))
        width,height = font.getsize(color)
        self.drawLeftAlignedText((pos[0]+200,height-10), color, (font, self.textColorColor))

    def save(self, filename, doubleSided=True):
        if not doubleSided:
            self.img.save(filename)
            return

        newimg = Image.new("RGB", (self.img.size[0]*2+20, self.img.size[1]), self.colorSeperator)
        newimg.paste(self.img, (0,0))
        newimg.paste(self.img, (self.img.size[0]+20,0))
        newimg.save(filename)


class DataFileReader(object):
    def __init__(self, filename):
        fp = open(filename)
        self.lines = [line[:-1] for line in fp.readlines()]
        fp.close()

    def getData(self):
        for id, line in enumerate(self.lines):
            print line
            user = line.split(";")
            
            yield (id, user[0], user[1], user[2])
            
# la couleur du badge définit l'espace
def getBadgeTemplate(role):
	if "Multimedia" in role:
		return "badgeTemplate/badge_template_multimedia.png"
	elif "Jeux" in role:
		return "badgeTemplate/badge_template_jeux.png"
	elif "Geek" in role:
		return "badgeTemplate/badge_template_geek.png"
	elif "Fablab" in role:
		return "badgeTemplate/badge_template_fablab.png"
	elif "Enfant" in role:
		return "badgeTemplate/badge_template_enfant.png"
	elif "Conférence" in role:
		return "badgeTemplate/badge_template_conference.png"
	elif "Pro" in role:
		return "badgeTemplate/badge_template_pro.png"
	elif "Citoyen" in role:
		return "badgeTemplate/badge_template_citoyen.png"
	else:
		return "Error"


if len(sys.argv) > 1:
    filenames = sys.argv[1:]
else:
    filenames = ["people"]

count = 0
for filename in filenames:
    reader = DataFileReader(filename + ".csv")
    
    if not os.path.exists(filename):
        os.makedirs(filename)
    
    for id, name, association,role in reader.getData():
        print("Badge ID: {} - Name: {} - Association: {} - role {}".format(id, name, association, role))

        badgeTemplate = getBadgeTemplate(role)
        badge = BadgeImage(badgeTemplate)
        badge.drawName(name)
        badge.drawAssociation(association)
        
        badge.save(os.path.join(filename, filename + "_badge_" + str(id) + ".png"), False)
