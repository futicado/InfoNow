import json
import pandas as pd

with open("c:\\Temp\\data.json", encoding='utf-8') as meu_json:
    dados = json.load(meu_json)


df = pd.read_json(dados, orient ='index')
print(df)
#print(dados) 

#import json
# Abrir o arquivo orders.json
#with open("data.json") as file:
    # Carregar seu conteúdo e torná-lo um novo dicionário
    #data = json.load(file)
 
#print(data)
    # Excluir o par chave-valor "client" de cada pedido
    #for order in data["orders"]:
        #del order["client"]

# Abrir (ou criar) um arquivo orders_new.json 
# e armazenar a nova versão dos dados.
#with open("orders_new.json", 'w') as file:
   # json.dump(data, file) 


    