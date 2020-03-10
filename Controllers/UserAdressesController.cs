using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using saru_ecommerce.Data;
using saru_ecommerce.Models;

namespace saru_ecommerce.Controllers
{
    public class UserAdressesController : Controller
    {
        private readonly SaruContext _context;

        public UserAdressesController(SaruContext context)
        {
            _context = context;
        }
        public IActionResult Create()
        {
            return View();
        }
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Create(int? userId, [Bind("Id,Description,Address,Number,Neighborhood,City,State,Complement,UserId")] UserAddress address)
        {
            ViewBag.UserId = userId;
            if (ModelState.IsValid)
            {
                _context.Add(address);
                await _context.SaveChangesAsync();
                return RedirectToAction("Index", new { id = userId });
            }
            return RedirectToAction("Index", "User", new { id = userId });
            // return View("~/Views/User/Index");
        }
    }
}