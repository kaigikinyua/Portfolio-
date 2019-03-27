from django.db import models

# Create your models here.
class Profile(models.Model):
	desc=models.CharField(max_length=300)
	icon=models.CharField(max_length=100)
	def __str__(self):
		return self.icon
class Section(models.Model):
	title=models.CharField(max_length=100)
	desc=models.CharField(max_length=500)
	def __str__(self):
		return self.title
class Project(models.Model):
	title=models.CharField(max_length=50)
	desc=models.CharField(max_length=300)
	icon=models.CharField(max_length=100)
	link=models.CharField(max_length=150)
	likes=models.IntegerField(default=1)
	dislikes=models.IntegerField(default=0)
	def __str__(self):
		return self.title+" "+str(self.likes)
class Review(models.Model):
	username=models.CharField(max_length=50)
	message=models.CharField(max_length=300)
	likes=models.IntegerField(default=1)
	dislikes=models.IntegerField(default=0)
	def __str__(self):
		return self.username