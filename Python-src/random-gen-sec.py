# Noted as completely deterministic 
# and not suitable for cryptographic purposes
import json
from numpy.random import default_rng

# Number of gathered items
n = 1600
training_samples = 1000
testing_samples = 500

# ==============================================
# ============== Training Samples ==============
# ==============================================
for s in range(training_samples):
    arr = []

    name = "./data/training/py-sec-samples/"+str(s+1)+".json"
    # Initialize generator. 
    # We initialize it so it has a consistent seed
    rand = default_rng()

    #collect data
    for i in range(n):
        num = rand.random()
        arr.append(num)

    # Convert to JSON obj
    json_object = json.dumps(arr) 

    with open(name, "w") as outfile:
        outfile.write(json_object)


# ==============================================
# ============== Testing Samples ==============
# ==============================================
for s in range(testing_samples):
    arr = []

    name = "./data/testing/py-sec-samples/"+str(s+1)+".json"
    # Initialize generator. 
    # We initialize it so it has a consistent seed
    rand = default_rng()

    #collect data
    for i in range(n):
        num = rand.random()
        arr.append(num)

    # Convert to JSON obj
    json_object = json.dumps(arr) 

    with open(name, "w") as outfile:
        outfile.write(json_object)
