from turtle import color
from kivy.lang import Builder
from kivymd.app import MDApp
from kivy.uix.screenmanager import Screen
from kivymd.uix.boxlayout import MDBoxLayout
from kivymd.uix.menu import MDDropdownMenu

class ContentNavigationDrawer(MDBoxLayout):
    pass    


class MyApp (MDApp):    
    def build(self):
        self.title = "PymeShield"
        return Builder.load_file("main2.kv")


MyApp().run()
