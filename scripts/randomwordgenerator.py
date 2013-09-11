from random import randrange
import os

__location__ = os.path.realpath(os.path.join(os.getcwd(),os.path.dirname(__file__)))

def randomword():
    f=open(os.path.join(__location__,'4letternorepeats.txt'),'r')
    wordlist=f.read().split()
    wordlistlength = len(wordlist)
    randnum = randrange(0,wordlistlength)
    return wordlist[randnum]

if __name__ == '__main__':
	print randomword()
