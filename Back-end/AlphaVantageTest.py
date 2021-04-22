import pandas
import numpy
import secrets
from alpha_vantage import timeseries
#Can request 5 per minute, Includes all historical data in pandas dataframe
#Open, High, low, Close, Adjusted Close, Volume, Dividend AMt, SPlit Coefficient.
#ONLY one stock at a time though, for larger orders need to pay.
#This DataProvider Seems Promising, Am able to collect daily prices and 

S = secrets.APIKEY()
ts = timeseries.TimeSeries(key=S.GetKeyAV(),output_format='pandas')
data, metaData = ts.get_daily_adjusted(symbol='MSFT')
print(data)

data = ts.get_quote_endpoint(symbol='MSFT')
print(data)

print("Done")