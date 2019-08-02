from tensorflow.keras.models import load_model
import numpy as np
import sys

model = load_model('/srv/http/AARN/best_model_096.h5') 
instance=[sys.argv[1],sys.argv[2],sys.argv[3],sys.argv[4],sys.argv[5],sys.argv[6]]

test_input = np.array([instance])
answer=model.predict_classes(test_input)
print(answer)

