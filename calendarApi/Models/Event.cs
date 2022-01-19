using MongoDB.Bson;
using MongoDB.Bson.Serialization.Attributes;
using System.Runtime.Serialization;
namespace calendarApi.Models
{
    [DataContract]
    public class Event{
        [BsonId]
        [BsonRepresentation(BsonType.ObjectId)]
        [DataMember]
        public string? Id { get; set; }
        [BsonElement("Name")]
        [DataMember]
        public string? Name { get; set;}
        [DataMember]
        public string? Owner { get; set;}
        [DataMember]
        public DateTime StartTime { get; set;}
        [DataMember]
        public DateTime EndTime { get; set;}
    }
}