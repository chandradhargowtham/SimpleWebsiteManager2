# Generated by Django 3.1.7 on 2021-04-13 20:50

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('blogPostApp', '0007_auto_20210413_2042'),
    ]

    operations = [
        migrations.DeleteModel(
            name='Tutorial',
        ),
        migrations.AddField(
            model_name='article',
            name='course',
            field=models.CharField(default='', max_length=120),
        ),
    ]
