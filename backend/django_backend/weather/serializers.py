from rest_framework import serializers

class WeatherSerializer(serializers.ModelSerializer):
    # class Meta:
    #     model = Weather
    #     fields = '__all__'

    def to_representation(self, instance):
        return {
            "id": instance.id,
            "uuid": instance.uuid,
            "uuid_user": instance.uuid_user.uuid,
            "date": instance.date,
            "incident_type": instance.incident_type,
            "uuid_type": instance.uuid_type,
            "description": instance.description,
            "status": instance.status
        }