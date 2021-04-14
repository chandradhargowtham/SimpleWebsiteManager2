from django.shortcuts import render
from .models import Article

# Create your views here.
#Article View
def article_list_view(request):
    articlesList = Article.objects.all()    
    context = {"articles":articlesList}
    return render(request,'articlesList.html',context)

#Course View
def course_list_view(request):
    articlesList = Article.objects.all()
    sortedlist = Article.objects.order_by('course')
    context = {"articles":sortedlist}
    return render(request,'courseList.html',context)

#View Article
def article_view(request,id):
    article = Article.objects.get(id=id)
    photo = str(article.image).split("/")
    context = {"article":article, "photo":photo[2]}
    return render(request,'article.html',context)

#Home View
def home_view(request):
    recentArticles= Article.objects.order_by('timestamp')[0:3]
    featuredArticles= Article.objects.order_by('category')[0:3]
    print(recentArticles)
    context={"recent":recentArticles,'featured':featuredArticles}
    return render(request,"home.html",context)

#sort and display stuff
def category_view(request,slug):
    articles = Article.objects.all()
    list = []
    for item in articles:
        if(item.category==slug):
            list.append(item)
    print(list)
    context = {'list':list}
    return render(request,"sortedList.html",context)