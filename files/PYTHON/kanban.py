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
