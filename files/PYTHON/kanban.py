import funciones                                    # importem arxiu funciones

class Kanban:
    def __init__(self,id, idTasca, nomTasca, descripcioTasca,estat, assignament):
        self.id = id                                # ID del kanban
        self.idTasca = idTasca                      # ID tasca aceptada
        self.nomTasca = nomTasca                    # Nom tasca
        self.descripcioTasca = descripcioTasca      # Descripcio tasca
        self.estat = estat                          # Estat tasca 
        self.assignament = assignament              # Assignament tasca

    # Select         
    def selectKanban(id):
        query = ("SELECT * FROM Kanban WHERE id.Kanban = %s", (id))
        resultat = funciones.consultaDatos(query)
        return resultat
    
    # Update
    def actualitzaRecomanacio(id, idTasca, nomTasca, descripcioTasca,estat, assignament):
        query = ("UPDATE Kanban SET Id= %s, IdTasca= %s, nomTasca= %s, descripcioTasca= %s, estat= %s, assignment= %s "(id, idTasca, nomTasca, descripcioTasca,estat, assignament))
        resultat = actualizarDatos(query)
        return resultat
    
    # Insert
    def inserirRecomanacio(id, idTasca, nomTasca, descripcioTasca,estat, assignament):
        query = ("INSERT INTO Kanban VALUES (%s,%s,%s,%s,%s,%s) "(id, idTasca, nomTasca, descripcioTasca,estat, assignament))
        resultat = funciones.insertarDatos(query)
        return resultat
    
    # Delete
    def eliminaRecomanacio(id):
        query = ("DELETE FROM Kanban WHERE id.Kanban = %s", (id))
        resultat = funciones.eliminarDatos(query)
        return resultat