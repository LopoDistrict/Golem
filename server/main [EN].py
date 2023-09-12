import os 
import random 
import mysql.connector
import time
import hashlib
import datetime
from termcolor import colored
from os.path import exists

os.system('cls')


print(
""" 
Made by Lopo District
06/06/23
V.0.0.9
BETA VERSION 

                .~.          .~.                 
             .^7?~:~!7!!!!!!7!~:~?7^.                  ██████╗  ██████╗ ██╗     ███████╗███╗   ███╗
          :7?!:                    :!?7:              ██╔════╝ ██╔═══██╗██║     ██╔════╝████╗ ████║
      :!?7^.                          .^7?!:          ██║  ███╗██║   ██║██║     █████╗  ██╔████╔██║
  .~??~.                                  .~??~.      ██║   ██║██║   ██║██║     ██╔══╝  ██║╚██╔╝██║
 P?:                                          :?P     ╚██████╔╝╚██████╔╝███████╗███████╗██║ ╚═╝ ██║
 B.                                            .B      ╚═════╝  ╚═════╝ ╚══════╝╚══════╝╚═╝     ╚═╝   
 P~                                            ~P 
 !5                                            5!       Developpers console.
  #                                            #  
  Y?                                          ?Y  
   #.                                        .#   
   ~G                                        G~   
    JY                                      YJ    
     YJ                                    JY     
      JY                                  YJ      
       !P.                              .P!       
        .P~                            ~P.        
          ?Y.                        .Y?          
           .Y?.                    .?Y.           
             :J?.                .?J:             
               .?J^            ^J?.               
                  ~J7:      :7J~                  
                    .~?7^^7?~.                    
                       .^^.                
""")

global code_simple
global id_code



def login():
    #check for the credentials text exist
    if not exists("credentials.txt"):
        #login
        user = input("Enter the user: ")
        password = input("Enter the password: ")
        host = input("Enter the host: ")
        
        #check if someone want to save the credentials
        remember = input("Remember the credentials?(Y/N): ")
        
    
        if remember == "Y" or remember == "y":
            with open("credentials.txt", "w") as f:
                #save the credentials
                f.write(user +"\n") 
                f.write(password + "\n")
                f.write(host)
                f.close()
                
        else:
            #dont save credentials
            pass

        try:
            #try to connect with the data entered
            mydb = mysql.connector.connect(user=user, 
                                                password=password,
                                                host=host,
                                                database="db",
                                                port = "port"
                                            
            )
            mycursor = mydb.cursor()
            mycursor.close()
            mydb.close()
            print(colored("[+]Connected to the database.", 'green')) 
            pass

        except:
            print(colored("error bad credentials","red"))
            login()


    else:
        print("auto logging is working...")
        #credentials already exist  
        with open("credentials.txt", "r") as fi:
            lst = []
            #getting line by line the code stored in credential
            for i, line in enumerate(fi):
                lst.append(line.strip())
                
                
            try:
                mydb = mysql.connector.connect(user=lst[0], 
                                                    password=lst[1],
                                                    host=lst[2],
                                                    database="db",
                                                    port = "port"
                                                
                )
                

                mycursor = mydb.cursor()
                mycursor.close()
                mydb.close()
                fi.close()
                print(colored("[+]Connected to the database.", 'green')) 
                pass



            except:
                print(colored("error bad credentials","red"))
                time.sleep(3)
                login()
            
            
            

login()

def help_c():
    print("""List of Command:
        -   /help or h => opens help command
        -   /generate_code or g => generates a code which is then destroyed when entered into golempro.com
        -   /delete_code or d => deletes a code by its id
        -   /database or db => displays values in the table
        -   /clear or clear => clears the screen
        -   /exit or e => close console
        -   /more or m => learn more about Golem
        -   /color or c=> change the color of the command prompt
                ↳/chelp or ch => see the different color
    """)

    time.sleep(1.5)




def settings():
    print("/help => command")




def generate_code():
    #Debut
    print("We'll give you the code in a moment - it can only be used once and will then be destroyed.")
    

    caractere = ['a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 
    't', 'u', 'v', 'w', 'x', 'y', 'z','A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O'
    , 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 
    '`','~','!','@','#','$','%','^','&','*','(',')','_','-','+','=','{','[','}','}','|',':',';','"','<'
    ,',','>','.','?','/']
    #caractère possible



    code_simple = ""
    id_code = ""

    

    #création du code
    for i in range(8):
        code_simple += random.choice(caractere)
        
    for k in range(5):
        id_code += str(random.randint(0,9))


    print(colored("[*]Here is the code: ",'green'), colored(code_simple,'green'))



    #encrypt
    md5_hash = hashlib.md5()

    md5_hash.update(code_simple.encode('utf-8'))
    code_simple_final = md5_hash.hexdigest()

    md5_hash.update(id_code.encode('utf-8'))
    id_code_final = md5_hash.hexdigest()
    





    print(colored("[+]Here is the id of this code: ",'green'), colored(id_code, 'green'))

    print("")
    

    with open("credentials.txt", "r") as fi:
        lst = []
        for i, line in enumerate(fi):
            lst.append(line.strip())
        #se connecter
        mydb = mysql.connector.connect(user=lst[0], 
                                            password=lst[1],
                                            host=lst[2],
                                            database="db",
                                            port = "port"
                                    
        )
        fi.close()


        mycursor = mydb.cursor()
        

        e = datetime.datetime.now()
        date = e.strftime("%Y-%m-%d %H:%M:%S")

        """
        #créer la table
        mycursor.execute("CREATE TABLE code_and_id (code VARCHAR(255), id VARCHAR(255), date VARCHAR(255))")
        print("table bien crée")
        """
        
        #insérer les valeurs dans la table code_and_id
        sql = "INSERT INTO code_and_id(code, id, date) VALUES (%s, %s, %s)"
        val = (code_simple_final, id_code_final, date)
        mycursor.execute(sql, val)
        print(colored("[+}value added to the database", 'green'))
        mydb.commit()

    
    fi.close
    mycursor.close()
    mydb.close()


    ************



def delete_code(id_num):
    with open("credentials.txt", "r") as fi:
        lst = []
        for i, line in enumerate(fi):
            lst.append(line.strip())
        #se connecter
        mydb = mysql.connector.connect(user=lst[0], 
                                        password=lst[1],
                                        host=lst[2],
                                        database="db",
                                        port = "port"
                                    
        )
        mycursor = mydb.cursor()
        fi.close()
        

        # encrypt
        md5_hash = hashlib.md5()



        delete_val = "DELETE FROM code_and_id WHERE id=%d"
        value = str(id_num)

        md5_hash.update(value.encode('utf-8'))
        id_delete = list(md5_hash.hexdigest())


        mycursor.execute(delete_val, id_delete)
        mydb.commit()
        print(colored("[+]Deleted values.",'green'))
    
        mycursor.close()    
        mydb.close()
        fi.close()


    

    
def data():
    with open("credentials.txt", "r") as fi:
        lst = []
        for i, line in enumerate(fi):
            lst.append(line.strip())
        #se connecter
        mydb = mysql.connector.connect(user=lst[0], 
                                        password=lst[1],
                                        host=lst[2],
                                        database="db",
                                        port = "port"
                                    
        )
        mycursor = mydb.cursor()
        

        mycursor.execute("SELECT * FROM code_and_id")

        result = mycursor.fetchall()
        print("                                     ----Values in table----")

        for row in result:
            print(row, '\n')
        mydb.close()
        mycursor.close()
        fi.close()






def color():
    color_input = input("enter the color value: ")
    try:
        os.system("color "+ color_input)
    
    except:
        print("not a valid color. => chelp to see color")
    





while True:
    print("")
    choice = input("> ")
    
    if choice == '/settings' or choice == '/s' or choice == 's':
        settings()

    elif choice == '/generate_code' or choice == '/g' or choice == 'g' :
        generate_code()

    elif choice == '/help' or choice == '/h' or choice == 'h' or choice == 'help':
        help_c()

    elif choice == '/delete_code' or choice == '/d' or choice == 'd':
        id_ = list(input("entrer l'id: "))
        delete_code(id_)

    
    elif choice == '/exit' or choice == "e" or choice == "exit" :
        print("Goodbye :)")
        exit()

    elif choice == '/db' or choice == 'db' or choice == "/database":
        data()
    
    elif choice == "/clear" or choice == "clear" :
        os.system('cls')
    elif choice == "/more" or choice == "more" or choice == "m":
        print("""Golem can help your company and your customers be sure of certain messages.
To start, generate a code with the g command and send the code you've generated 
with your message to the person of your choice.
[!] Please note that each code is unique, so you can't send the same code to more than one person. [!]""")

    elif choice == "/color" or choice == "c":
        color()
    

    elif choice == "/chelp" or choice == "chelp" or choice == "ch":
        os.system("color help")

    
    else:
        print(colored("[-]command not found. Try /help", 'red'))
