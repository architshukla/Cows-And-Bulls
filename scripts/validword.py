#!/usr/bin/python

# Quick spell checker module for word validity 
# to be used in cows-and-bulls
# Author: Shashank S Rao

import os

__location__ = os.path.realpath(os.path.join(os.getcwd(),os.path.dirname(__file__)))

def check(guess):
  try:
    f = open(os.path.join(__location__,"4letterwords.txt"),"r")
  except:
    import sys
    print "Unable to find dictionary"
    sys.exit()
  words = f.read().split()
  if guess.upper() in words:
    #checking for duplicate letters in word
    if len(set(guess))==4:
      return True
    else:
      return False
  else:
    return False

if __name__ == "__main__":
    import sys
    if len(sys.argv)<2:
      print "Usage: python checker.py <guess>"
      sys.exit()
    if check(sys.argv[1]) == True:
      print "valid"
    else:
      print "invalid"
