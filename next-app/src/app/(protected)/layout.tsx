import { redirect } from "next/navigation";
import { getSession } from "@/lib/session";
import { Nav } from "@/components/Nav";
import { Footer } from "@/components/Footer";

export default async function ProtectedLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  const session = await getSession();
  if (!session.username) redirect("/login");

  return (
    <>
      <Nav username={session.username} />
      <main className="flex-1">{children}</main>
      <Footer />
    </>
  );
}
