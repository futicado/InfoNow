import json
import pandas as pd
from sklearn import tree
from sklearn.tree import DecisionTreeClassifier
import matplotlib.pyplot as plt
import sklearn.externals as extjoblib
import joblib


df = pd.read_json('C:\\Temp\\data.json')
entrada = pd.read_json('C:\\Temp\\entrada.json')
X=df.drop(columns=['conformidade'], axis=1)  #removendo a coluna conformidade dos dados de entrada
y=df['conformidade'] # pengando os valores da coluna conformidade
e=entrada.drop(columns=['conformidade'], axis=1) #Dados da entrada


#treinando o modelo para as previsões.
modelo=DecisionTreeClassifier()
modelo.fit(X,y)

#carregando apartir do modelo já treinado e salbvo
modelo = joblib.load('C:\\Temp\\modelo.h5')


#criando um dicionário com as variáveis
dic = {'score':modelo.feature_importances_,'features':X.columns}
#criando um dataframe com os dados
df = pd.DataFrame(dic).sort_values('score',ascending=False)
print(df)

#gerando a o gráfico da árvore treinada.
tree.plot_tree(modelo,feature_names =X.columns)
plt.savefig('C:\\xampp\\htdocs\\InfoNow\\public\\img\\arvore.png', format='png')
