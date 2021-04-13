from django.shortcuts import render
from .models import Article

# Create your views here.
#Article View
def article_list_view(request):
    articlesList = Article.objects.all()    
    context = {"articles":articlesList}
    return render(request,'articlesList.html',context)

def article_view(request,id):
    article = Article.objects.get(id=id)
    photo = str(article.image).split("/")
    context = {"article":article, "photo":photo[2]}
    return render(request,'article.html',context)
