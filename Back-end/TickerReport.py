import json

class TickerReport:
    """
    Class is used to configure the JSON file for output by adding tickers and values to file. 
    Used in conjunction with the TickerCollection Algorithm to collect all the information.

    Constructor initiates the final writeName, this is purely a helper class and logic is needed for collecting
    the actual ticker prices.
    """
    def __init__(self,filename):
        self.filename = filename
        self.data = {} #Dictionary of all tickers and their prices

    def Write(self,ticker_name,ticker_value,ticker_amount):
        """Will write a ticker value to the dictionary, used for when you want to write a mass amount of ticker data at once"""
        self.data[ticker_name] =[]
        self.data[ticker_name].append({'Price':ticker_value,
                                       'Amount':ticker_amount})


    def Dump(self):
        with open(self.filename,'w') as outfile:
            json.dump(self.data,outfile)
