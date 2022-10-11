# Noted as completely deterministic 
# and not suitable for cryptographic purposes
import json
from numpy.random import default_rng

# Number of gathered items
n = 1000
samples = 500

for s in range(samples):
    arr = []

    name = "./sec-samples/"+"python-rand-sec"+str(s+1)+".json"
    # Initialize generator. 
    # We initialize it so it has a consistent seed
    rand = default_rng()

    #collect data
    for i in range(n):
        num = rand.random()
        arr.append(num)

    #print(arr)
    # Convert to JSON obj
    json_object = json.dumps(arr) 

    with open(name, "w") as outfile:
        outfile.write(json_object)