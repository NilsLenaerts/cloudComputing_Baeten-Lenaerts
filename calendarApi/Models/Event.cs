namespace calendarApi.Models
{
    public class Event{
        public long Id { get; set; }
        public string? Name { get; set;}
        public string? Start { get; set;}
        public string? End { get; set;}

        public DateTime time {get;set;}
        public string? OwnerSecret {get;set;}
    }
}