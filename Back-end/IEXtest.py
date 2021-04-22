import pandas
import numpy
import secrets
import os
from iexfinance.stocks import Stock
from iexfinance.account import get_metadata



#Can obtain Quotes, cannot obtain actual prices with free account, 

S = secrets.APIKEY()


aapl = Stock("AAPL", token="sk_58469ced806849bba422a3dba47adf87")
print(aapl.get_quote())
print(aapl.get_open_close())
