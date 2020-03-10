using System;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using saru_ecommerce.Data;
using saru_ecommerce.Models;

namespace saru_ecommerce.Controllers
{
    public class UserController : Controller
    {
        private readonly SaruContext _context;

        public UserController(SaruContext context)
        {
            _context = context;
        }
        // public async Task<IActionResult> Index(string searchString)
        // {
        //     var users = from u in _context.Users
        //                 select u;

        //     if (!String.IsNullOrEmpty(searchString))
        //     {
        //         users = users.Where(s => s.Name.Contains(searchString) || s.Email.Contains(searchString));
        //     }

        //     return View(await users.ToListAsync());
        // }
        [Route("usuario/{id:int}")]
        public async Task<IActionResult> Index(int? id)
        {
            return View(await _context.Users.FindAsync(id));
        }
        public IActionResult Create()
        {
            return View();
        }
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Create([Bind("Id,Name,Email,Cpf,BirthDate,Gender,Password,PhoneNumberPrimary,PhoneNumberSecondary")] User user)
        {
            if (ModelState.IsValid)
            {
                _context.Add(user);
                await _context.SaveChangesAsync();
                var userId = user.UserId;
                return RedirectToAction("Index", new { id = userId });
            }
            return View(user);
        }       

        public async Task<IActionResult> Details(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var user = await _context.Users.FirstOrDefaultAsync(m => m.UserId == id);

            if (user == null)
            {
                return NotFound();
            }

            return View(user);
        }

        public async Task<IActionResult> Edit(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var user = await _context.Users.FindAsync(id);

            if (user == null)
            {
                return NotFound();
            }

            return View(user);
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Edit(int id, [Bind("UserId,Name,Email,Cpf,BirthDate,Gender,Password,PhoneNumberPrimary,PhoneNumberSecondary")] User user)
        {
            if (id != user.UserId)
            {
                return NotFound();
            }

            if (ModelState.IsValid)
            {
                try
                {
                    _context.Update(user);
                    await _context.SaveChangesAsync();
                }
                catch (DbUpdateConcurrencyException)
                {
                    if (!UserExists(user.UserId))
                    {
                        return NotFound();
                    }
                    else
                    {
                        throw;
                    }
                }
                return RedirectToAction(nameof(Index), new {id = user.UserId});
            }
            return View(user);
        }
        public async Task<IActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var user = await _context.Users.FirstOrDefaultAsync(u => u.UserId == id);

            if (user == null)
            {
                return NotFound();
            }

            return View(user);
        }

        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> DeleteConfirmed(int id)
        {
            var user = await _context.Users.FindAsync(id);
            _context.Users.Remove(user);
            await _context.SaveChangesAsync();
            return RedirectToAction(nameof(Index));
        }
        private bool UserExists(int id)
        {
            return _context.Users.Any(e => e.UserId == id);
        }
    }
}