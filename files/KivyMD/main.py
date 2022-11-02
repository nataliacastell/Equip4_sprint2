from kivy.lang import Builder
from kivymd.app import MDApp
from kivy.uix.screenmanager import Screen

class DashBoard(Screen):
    pass

class FirstScreen(Screen):
    pass

class MyApp (MDApp):
    def build(self):
        self.title = "PymeShield"
        self.theme_cls.primary_palette = "Green"
        return Builder.load_file("main.kv")

MyApp().run()