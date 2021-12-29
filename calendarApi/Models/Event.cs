using MongoDB.Bson;
using MongoDB.Bson.Serialization.Attributes;

namespace calendarApi.Models
{
    public class Event{
        [BsonId]
        [BsonRepresentation(BsonType.ObjectId)]
        public string? Id { get; set; }
        [BsonElement("Name")]
        public string? Name { get; set;}
        public string? Owner { get; set;}
        public DateTime StartTime { get; set;}
        public DateTime EndTime { get; set;}
        public string? OwnerSecret {get;set;}
    }
}