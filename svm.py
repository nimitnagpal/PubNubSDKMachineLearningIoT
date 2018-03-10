from pubnub.callbacks import SubscribeCallback
from pubnub.enums import PNStatusCategory
from pubnub.pnconfiguration import PNConfiguration
from pubnub.pubnub import PubNub

pnconfig = PNConfiguration()

import numpy as np
from sklearn import preprocessing, cross_validation, neighbors , svm
import pandas as pd


pnconfig = PNConfiguration()

pnconfig.subscribe_key = 'sub-c-f8ee4c62-2497-11e8-a183-761142583d66'
pnconfig.publish_key = 'pub-c-89c7fbd5-76f5-4c6a-8511-c153e7517db4'

df=pd.read_csv('data.csv')
df.replace('?',-9999, inplace=True)
X = np.array(df.drop(['Metal'],1))
y = np.array(df['Metal'])

def my_publish_callback(envelope, status):
    if not status.is_error():
        pass 
    else:
        pass 
		
X_train,X_test,y_train,y_test = cross_validation.train_test_split(X,y,test_size=0.3)

clf = svm.SVC()
clf.fit(X_train,y_train)
accuracy = clf.score(X_test,y_test)

example_measures = np.array([[12],[75],[140]])
example_measures = example_measures.reshape(3,-1)
predictions = clf.predict(example_measures)
print(accuracy)
print(predictions)

 def status(self, pubnub, status):
        if status.category == PNStatusCategory.PNUnexpectedDisconnectCategory:
            pass 
 
        elif status.category == PNStatusCategory.PNConnectedCategory:
            
            pubnub.publish().channel("Dear User,Thanks for user PubNub IoT Recycle").message("Hello!!").async(my_publish_callback)
        elif status.category == PNStatusCategory.PNReconnectedCategory:
            pass
            
        elif status.category == PNStatusCategory.PNDecryptionErrorCategory:
            pass
            
 
    def message(self, pubnub, message):
        pass 
