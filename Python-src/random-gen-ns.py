# Noted as completely deterministic 
# and not suitable for cryptographic purposes
import random
import json


# Number of gathered items
n = 1000
training_samples = 1000
testing_samples = 500

# ==============================================
# ============== Training Samples ==============
# ==============================================
for s in range(training_samples):
    arr = []

    name = "./data/training/py-ns-samples/"+str(s+1)+".json"
    # Initialize generator. 
    # We initialize it so it has a consistent seed
    rand = random.Random()

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

    name = "./data/testing/py-ns-samples/"+str(s+1)+".json"
    # Initialize generator. 
    # We initialize it so it has a consistent seed
    rand = random.Random()

    #collect data
    for i in range(n):
        num = rand.random()
        arr.append(num)

    # Convert to JSON obj
    json_object = json.dumps(arr) 

    with open(name, "w") as outfile:
        outfile.write(json_object)
