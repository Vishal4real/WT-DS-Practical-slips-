import pandas as pd
import matplotlib.pyplot as plt
iris = pd.read_csv("Iris.csv")
iris['Species'].value_counts().plot.pie(explode=[0,0,0,],autopct='%1.1f%%',shadow=True,figsize=(10,8))
plt.title("Iris Species %")
plt.show()