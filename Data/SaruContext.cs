using Microsoft.EntityFrameworkCore;
using saru_ecommerce.Models;

namespace saru_ecommerce.Data
{
    public class SaruContext : DbContext
    {
        public SaruContext(DbContextOptions<SaruContext> options) : base(options)
        {

        }
        public DbSet<User> Users { get; set; }
        public DbSet<UserAddress> UserAdresses { get; set; }
        protected override void OnModelCreating(ModelBuilder builder)
        {
            builder.Entity<User>()
                .HasIndex(e => e.Email)
                .IsUnique();

            builder.Entity<UserAddress>()
                .HasOne(a => a.User)
                .WithMany(u => u.Adresses)
                .IsRequired()
                .HasForeignKey(a => a.UserId);

            builder.Entity<UserCard>()
                .HasOne(c => c.User)
                .WithMany(u => u.Cards)
                .IsRequired()
                .HasForeignKey(c => c.UserId);
        }
    }
}