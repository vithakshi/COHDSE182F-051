text = input("Enter the you wnat to encrypt")
alphabet = 'abcdefghijklmnopqrstuvwxyz'
encryptText = ''
for i in text:
    position = alphabet.find(i)
    newPosition = (position+5)%26
    encrypt+=alphabet[newPosition]
print(encrypt)
