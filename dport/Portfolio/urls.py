from django.urls import path
from . import views
urlpatterns=[
	path('',views.index),
	path('index.html',views.index),
	path('projects.html',views.projects),
	path('reviews.html',views.reviews),
]