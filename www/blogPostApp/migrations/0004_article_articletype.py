# Generated by Django 3.1.7 on 2021-04-13 20:08

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('blogPostApp', '0003_auto_20210413_1343'),
    ]

    operations = [
        migrations.AddField(
            model_name='article',
            name='articleType',
            field=models.CharField(choices=[('article', 'article'), ('tutorial', 'tutorial')], default='article', max_length=120),
        ),
    ]
