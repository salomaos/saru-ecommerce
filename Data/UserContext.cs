using Microsoft.EntityFrameworkCore;
using saru_ecommerce.Models;

namespace saru_ecommerce.Data
{
    public class UserContext : DbContext
    {
        public UserContext(DbContextOptions<UserContext> options) : base(options)
        {

        }
        public DbSet<User> Users { get; set; }
    }
}