# Generated by Django 3.1.7 on 2021-04-14 05:35

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('blogPostApp', '0008_auto_20210413_2050'),
    ]

    operations = [
        migrations.AlterField(
            model_name='article',
            name='course',
            field=models.CharField(default='', max_length=120, null=True),
        ),
        migrations.AlterField(
            model_name='article',
            name='image',
            field=models.ImageField(null=True, upload_to='blogPostApp/static'),
        ),
    ]
