from django.contrib import admin
from django.urls import include, path

from IT import views

urlpatterns = [
    path('admin/', admin.site.urls),
]