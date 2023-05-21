import json
import pandas as pd
from sklearn import tree
from sklearn.tree import DecisionTreeClassifier
import matplotlib.pyplot as plt
import joblib

df = pd.read_json('C:\\Temp\\data.json')
entrada = pd.read_json('C:\\Temp\\entrada.json')
#print(df)
#print(entrada)

X=df.drop(columns=['conformidade'], axis=1)  #removendo a coluna conformidade dos dados de entrada
y=df['conformidade'] # pengando os valores da coluna conformidade
#print(X.head())
e=entrada.drop(columns=['conformidade'], axis=1) #Dados da entrada
#print(e)

#treinando o modelo para as previsões.
modelo=DecisionTreeClassifier()
modelo.fit(X,y)

#Criando um modelo treinado para as próximas consultas
modelo = joblib.dump( modelo, 'C:\\Temp\\modelo.h5')

#carregando apartir do modelo já treinado e salbvo
modelo = joblib.load('C:\\Temp\\modelo.h5')

previsao=int(modelo.predict(e))
print(previsao)



#gerando o gráfico da árvore treinada.
tree.plot_tree(modelo,feature_names =X.columns)
plt.savefig('C:\\Temp\\arvore.png', format='png')
#plt.show()


#criando um dicionário com as variáveis
#dic = {'score':modelo.feature_importances_,'features':X.columns}
#riando um dataframe com os dados
#df = pd.DataFrame(dic).sort_values('score',ascending=False)
#print(df)

#mportance = modelo.feature_importances_
# summarize feature importance
#or i,v in enumerate(importance):
 #rint('Feature: %0d, Score: %.5f' % (i,v))
#plot feature importance
#pyplot.bar([x for x in range(len(importance))], importance)
#pyplot.show()


