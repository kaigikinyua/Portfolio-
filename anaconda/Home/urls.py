from django.urls import path
from . import views
urlpatterns=[
	path('robot/',views.index),
	path('',views.homepage),
]