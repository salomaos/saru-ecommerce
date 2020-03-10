using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Migrations;

namespace saru_ecommerce.Migrations
{
    public partial class FixedFKError : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_UserCard_Users_UserCardId",
                table: "UserCard");

            migrationBuilder.AlterColumn<int>(
                name: "UserCardId",
                table: "UserCard",
                nullable: false,
                oldClrType: typeof(int),
                oldType: "int")
                .Annotation("MySql:ValueGenerationStrategy", MySqlValueGenerationStrategy.IdentityColumn);

            migrationBuilder.CreateIndex(
                name: "IX_UserCard_UserId",
                table: "UserCard",
                column: "UserId");

            migrationBuilder.AddForeignKey(
                name: "FK_UserCard_Users_UserId",
                table: "UserCard",
                column: "UserId",
                principalTable: "Users",
                principalColumn: "UserId",
                onDelete: ReferentialAction.Cascade);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropForeignKey(
                name: "FK_UserCard_Users_UserId",
                table: "UserCard");

            migrationBuilder.DropIndex(
                name: "IX_UserCard_UserId",
                table: "UserCard");

            migrationBuilder.AlterColumn<int>(
                name: "UserCardId",
                table: "UserCard",
                type: "int",
                nullable: false,
                oldClrType: typeof(int))
                .OldAnnotation("MySql:ValueGenerationStrategy", MySqlValueGenerationStrategy.IdentityColumn);

            migrationBuilder.AddForeignKey(
                name: "FK_UserCard_Users_UserCardId",
                table: "UserCard",
                column: "UserCardId",
                principalTable: "Users",
                principalColumn: "UserId",
                onDelete: ReferentialAction.Cascade);
        }
    }
}
