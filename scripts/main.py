from randomwordgenerator import *
from checker import *
from validword import *

def main(word,guess):
	word = word.lower()
	guess = guess.lower()
	if check(guess):
		print checker(word,guess)
	else:
		print "invalid"


if __name__ == '__main__':
	import sys
	if len(sys.argv)<3:
		print "python main.py word guess"
		sys.exit()
	main(sys.argv[1].lower(),sys.argv[2].lower())