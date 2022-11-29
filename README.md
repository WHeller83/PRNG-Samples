6 Total Algorithms:

Python 3.10: random.py library: random()
	• Implements Mersenne Twister as the core generator.
	• 53-bit precision floats in range [0.0, 1.0)
	• Period of 2**19937-1
	• Noted as completely deterministic and not suitable for cryptographic purposes
DOC: https://docs.python.org/3/library/random.html#random.random


Python 3.10: numpy library: random
	• default_rng module creates a new Generator instance, which can generate things
	• By default, Generator uses PCG-64 (Permuted Congruential Generator 64-bit)
	• Period of 2**128
	• Specifically uses PCG XSL RR 128/64
DOC: https://numpy.org/doc/stable/reference/random/bit_generators/pcg64.html#numpy.random.PCG64


Java 8: Util.Random: Random
	• Instantiable class used to generate pseudo-random numbers
	• Uses a 48-bit seed
	• Implements Linear Congruential Formula, a very simple and unsafe PRNG algorithm
	• Also implemented by Java's Math library
DOC: https://docs.oracle.com/javase/8/docs/api/java/util/Random.html
ALG: https://www.eg.bucknell.edu/~xmeng/Course/CS6337/Note/master/node40.html
ALG: https://www.geeksforgeeks.org/linear-congruence-method-for-generating-pseudo-random-numbers/


Java 8: Util.Random : SecureRandom
	• A "cryptographically strong" random number generator
	• Implementation is not specified, likely for security purposes
	• Input cannot be seeded, likely for unpredictability
	• Complies to FIPS tests and RFC recommendations
DOC: https://docs.oracle.com/javase/8/docs/api/java/security/SecureRandom.html


PHP 8: rand()
	• Already shown to be a terrible PRNG algorithm. Including it for the sake of testing
	• Implements Mersenne Twister
DOC: https://www.php.net/manual/en/function.rand.php
ALG: http://www.math.sci.hiroshima-u.ac.jp/m-mat/MT/emt.html


PHP 8: random_int()
	• "Generates cryptographically secure pseudo-random integers"
	• On Windows (my system), uses wincrypt's CryptGenRandom
	• Undocumented implementation for security purposes
DOC: https://www.php.net/manual/en/function.random-int.php
ORG: https://docs.microsoft.com/en-us/windows/win32/api/wincrypt/nf-wincrypt-cryptgenrandom
