# Generated by Django 4.2.9 on 2024-02-01 17:40

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('stations', '0003_slot'),
    ]

    operations = [
        migrations.AddField(
            model_name='bike',
            name='rfid_tag',
            field=models.CharField(blank=True, max_length=100, null=True),
        ),
    ]