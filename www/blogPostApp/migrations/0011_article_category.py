# Generated by Django 3.1.7 on 2021-04-14 13:10

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('blogPostApp', '0010_auto_20210414_0537'),
    ]

    operations = [
        migrations.AddField(
            model_name='article',
            name='category',
            field=models.CharField(blank=True, choices=[('Unity', 'Unity'), ('Web', 'Web'), ('Blockchain', 'Blockchain'), ('General', 'General'), ('Design Patterns', 'Design Patterns'), ('Programming', 'Programming')], default='', max_length=120),
        ),
    ]
