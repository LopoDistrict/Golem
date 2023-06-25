import os 
import random 
import mysql.connector
import time






os.system('cls')


print(
""" 
Made by Nashou
06/06/23
V.0.0.6

 ██████╗  ██████╗ ██╗     ███████╗███╗   ███╗
██╔════╝ ██╔═══██╗██║     ██╔════╝████╗ ████║
██║  ███╗██║   ██║██║     █████╗  ██╔████╔██║
██║   ██║██║   ██║██║     ██╔══╝  ██║╚██╔╝██║
╚██████╔╝╚██████╔╝███████╗███████╗██║ ╚═╝ ██║
 ╚═════╝  ╚═════╝ ╚══════╝╚══════╝╚═╝     ╚═╝                              


""")

global code_simple
global id_code







def help_c():
    print("""List of Command:
        -   /help - open help command
        -   /generate_code - generate the code and an id to delete it
        -   /delete_code - delete the generated code by the id (travail)
        -   /exit - fermer la console
    """)
    time.sleep(2)


    




def settings():
    print("Made by Nashou")
    print("V.0.0.4")
    print("/help => command")





def generate_code():
    #Debut
    print("Nous allons vous donner le code dans un instant il n'est utilisable qu'une seul fois et sera après détruit")
    #caractère possible


    caractere = ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 
    't', 'u', 'v', 'w', 'x', 'y', 'z','A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O'
    , 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 
    '`','~','!','@','#','$','%','^','&','*','(',')','_','-','+','=','{','[','}','}','|',':',';','"','<'
    ,',','>','.','?','/']

    code_simple = ""
    id_code = ""

    #création du code
    for i in range(20):
        code_simple += random.choice(caractere)
        
    for k in range(5):
        id_code += str(random.randint(0,9))

    print("voici le code: ", code_simple)
    print("Voici l'id de ce code: ", id_code)
    


    #se connecter
    mydb = mysql.connector.connect(user='root', 
                                    password='',
                                    host='localhost',
                                    database=''
    )


    mycursor = mydb.cursor()
    



    """
    #créer la table
    mycursor.execute("CREATE TABLE code_and_id (code VARCHAR(255), id VARCHAR(255))")
    print("table bien crée")
    """


    
    #insérer les valeurs dans la table code_and_id
    sql = "INSERT INTO code_and_id (code, id) VALUES (%s, %s)"
    val = (code_simple, id_code)
    mycursor.execute(sql, val)
    print("valeur bien rajouté à la table code_and_id")
    mydb.commit()

    mydb.close()






def delete_code(id):
    
        mydb = mysql.connector.connect(user='root', 
                                        password='',
                                        host='localhost',
                                        database=''
        )


        mycursor = mydb.cursor()

        delete_val = ("""DELETE FROM code_and_id code 
                            WHERE id=%s;
                            SELECT * FROM code_and_id;""")
        value = (id)
        mycursor.execute(delete_val, value)
        mydb.commit()
        return("Value deleted.")

        mydb.close()
    




    

while True:
    
    print("/help for the command")
    choice = input("> ")
    

    if choice == '/settings':
        settings()

    elif choice == '/generate_code':
        generate_code()

    elif choice == '/help':
        help_c()

    elif choice == '/delete_code':
        print('en travail')
        delete_code(argument)
    elif choice == '/exit':
        exit()
