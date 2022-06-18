try:
    str1=input('Enter the file name:')
    fhand = open(str1,'r') 
except:
    print('entered file does not exit')