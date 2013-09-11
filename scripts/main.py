from randomwordgenerator import *
from checker import *
from validword import *

def main(word,guess):
	if check(guess):
		print "valid"
		print checker(word,guess)
	else:
		print "invalid"


if __name__ == '__main__':
	import sys
	if len(sys.argv)<3:
		print "python main.py word guess"
		sys.exit()
	main(sys.argv[1],sys.argv[2])