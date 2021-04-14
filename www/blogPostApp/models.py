from django.db import models


# Create your models here.
# Article
class Article(models.Model):
    title = models.CharField(max_length=120,default="Article Title")
    content =models.TextField(default="Enter Content")
    author = models.CharField(max_length=25,default="Chan")
    timestamp= models.DateTimeField(auto_now=True)
    image =models.ImageField(upload_to="blogPostApp/static",blank = True)
    course = models.CharField(max_length=120, default="", blank=True)
    category = models.CharField(max_length=120, default="", blank=True, choices=[("Unity","Unity"),("Web","Web"),("Blockchain","Blockchain"),("General","General"),("DesignPatterns","DesignPatterns"),("Programming","Programming")])

    def __str__(self):
        return self.title



      