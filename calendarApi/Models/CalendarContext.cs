using Microsoft.EntityFrameworkCore;
using System.Diagnostics.CodeAnalysis;

namespace calendarApi.Models
{
    public class CalendarContext : DbContext
    {
        public CalendarContext(DbContextOptions<CalendarContext> options) : base(options)
        {

        }
        public DbSet<Event> Events {set; get;} = null!;
    }
}