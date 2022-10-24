import json
from files.PYTHON.funciones import actualizarDatos
import funciones

class Kanban:
    def __init__(self,id, idTasca, nomTasca, descripcioTasca,estat, assignament):
        self.id = id
        self.idTasca = idTasca
        self.nomTasca = nomTasca
        self.descripcioTasca = descripcioTasca
        self.estat = estat
        self.assignament = assignament
    def selectKanban(id):
        query = ("SELECT * FROM Kanban WHERE id.Kanban = %s", (id))
        resultat = funciones.consultaDatos(query)
        return resultat
    def actualitzaRecomanacio(id, idTasca, nomTasca, descripcioTasca,estat, assignament):
        query = ("UPDATE Kanban SET Id= %s, IdTasca= %s, nomTasca= %s, descripcioTasca= %s, estat= %s, assignment= %s "(id, idTasca, nomTasca, descripcioTasca,estat, assignament))
        resultat = actualizarDatos(query)
        return resultat
    def inserirRecomanacio(id, idTasca, nomTasca, descripcioTasca,estat, assignament):
        query = ("INSERT INTO Kanban VALUES (%s,%s,%s,%s,%s,%s) "(id, idTasca, nomTasca, descripcioTasca,estat, assignament))
        resultat = funciones.insertarDatos(query)
        return resultat
    def eliminaRecomanacio(id):
        query = ("DELETE FROM Kanban WHERE id.Kanban = %s", (id))
        resultat = funciones.eliminarDatos(query)
        return resultat