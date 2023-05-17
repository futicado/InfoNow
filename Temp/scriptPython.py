import json
import pandas as pd
from sklearn import tree
from sklearn.tree import DecisionTreeClassifier

df = pd.read_json('C:\\Temp\\data.json')
#print(df)

X=df.drop(columns=['conformidade'], axis=1)  #removendo a coluna conformidade dos dados de entrada
y=df['conformidade'] # pengando os valores da coluna conformidade

#print(X)
modelo=DecisionTreeClassifier()
modelo.fit(X,y)

previsao=modelo.predict([[0,0,1,2,0,1,0,0,0,1]])
print(previsao)


# o classificador encontra padrões nos dados de treinamento
#clf = tree.DecisionTreeClassifier() # instância do classificador
#clf = clf.fit(features, labels) # fit encontra padrões nos dados

# iremos utilizar para classificar uma nova fruta
#print(clf.predict([[1,1,2]]));

