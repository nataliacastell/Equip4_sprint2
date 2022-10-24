import MySQLdb

# Datos de la BBDD:
DB_HOST = 'localhost' 
DB_USER = 'shell' 
DB_PASS = 'shell' 
DB_NAME = 'pymeshell' 

# Consulta filtrada:
def consultaDatos(query): # añadir consulta en variable query
    datos = [DB_HOST, DB_USER, DB_PASS, DB_NAME] 
    
    conn = MySQLdb.connect(*datos) # Conectar a la base de datos 
    cursor = conn.cursor()         # Crear un cursor 
    cursor.execute(query)          # Ejecutar una consulta 

    if query.upper().startswith('SELECT'): 
        resultat = cursor.fetchall()   # Traer los resultados de un select 
    else: 
        conn.commit()              # Hacer efectiva la escritura de datos 
        resultat = None 
    
    cursor.close()                 # Cerrar el cursor 
    conn.close()                   # Cerrar la conexión 

    return resultat

