from django.contrib import admin
from .models import Section,Profile,Project,Review
# Register your models here.
admin.site.register(Profile)
admin.site.register(Section)
admin.site.register(Project)
admin.site.register(Review)