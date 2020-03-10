using System.ComponentModel.DataAnnotations;

namespace saru_ecommerce.Models
{
    public class UserCard
    {
        public int UserCardId { get; set; }
        [Required]
        public string Number { get; set; }
        [Required]
        public string NameHolder { get; set; }
        [Required]
        public string ExpireDate { get; set; }
        [Required]
        public string SecurityCode { get; set; }
        public bool Remember { get; set; }
        [Required]
        public int UserId { get; set; }
        public User User { get; set; }
    }
}