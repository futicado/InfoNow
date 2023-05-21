import json
import pandas as pd
from sklearn import tree
from sklearn.tree import DecisionTreeClassifier
import matplotlib.pyplot as plt
import joblib


df = pd.read_json('C:\\Temp\\data.json')
entrada = pd.read_json('C:\\Temp\\entrada.json')
X=df.drop(columns=['conformidade'], axis=1)  #removendo a coluna conformidade dos dados de entrada
y=df['conformidade'] # pengando os valores da coluna conformidade
e=entrada.drop(columns=['conformidade'], axis=1) #Dados da entrada

#carregando apartir do modelo já treinado e salbvo
modelo= joblib.load('C:\\Temp\\modelo.joblib')


#treinando o modelo para as previsões.
modelo=DecisionTreeClassifier()
modelo.fit(X,y)

previsao=modelo.predict(e)
print(previsao)
